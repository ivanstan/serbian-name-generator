class SerbianNameGenerator {

    constructor() {
        this._prefixes = [
            'ljubo',
            'drago',
            'mio',
            'slavo',
            'bozi',
            'bogo',
            'stani',
            'brani',
            'budi',
            'beri',
            'blago',
            'brati',
            'veli',
            'vlasti',
            'voji',
            'desi',
            'zivo',
            'mili'
        ];

        this._suffixes = [
            'mir',
            'slav',
            'ljub',
            'dar',
            'sav',
            'voj',
            'slava',
            'jlo',
            'rad',
            'borka',
            'vojka',
            'jin',
        ];
    }

    /**
     * @return array
     */
    getPrefixes() {
        return this._prefixes;
    }

    /**
     * @return array
     */
    getSuffixes() {
        return this._suffixes;
    }

    generate() {
        var result = [];

        for(let i in this._prefixes)
        {
            let prefix = this._prefixes[i];
            for(let j in this._suffixes)
            {
                let suffix = this._suffixes[j];

                result.push(prefix + suffix);

            }
        }

        // sort($rval);

        return result;
    }
}